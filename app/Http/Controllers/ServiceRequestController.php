<?php

namespace App\Http\Controllers;

use App\Enums\ServiceRequestStatusEnum;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $serviceRequests = ServiceRequest::query()
            ->with(['user.document', 'service'])
            ->when($request->has('status'), function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.service-requests.index', compact('serviceRequests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // در کنترلر مطمئن شوید همیشه JSON برمی‌گردانید:
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(ServiceRequest $serviceRequest)
    {
        $services = Service::where('is_active', true)->get();

        return view('admin.service-requests.edit', [
            'serviceRequest' => $serviceRequest,
            'services' => $services
        ]);
    }

    public function update(Request $request, ServiceRequest $serviceRequest)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'description' => 'required|string|max:2000',
            'status' => 'required|in:' . implode(',', array_column(ServiceRequestStatusEnum::cases(), 'value')),
            'admin_notes' => 'nullable|string|max:1000',
            'rejection_reason' => 'nullable|required_if:status,rejected|string|max:1000',
            'requested_at' => 'nullable|date',
        ]);

        $serviceRequest->update([
            'service_id' => $validated['service_id'],
            'status' => $validated['status'],
            'description' => $validated['description'],
            'admin_notes' => $validated['admin_notes'],
            'rejection_reason' => $validated['rejection_reason'] ?? null,
            'requested_at' => $validated['requested_at'] ?? $serviceRequest->requested_at,
        ]);

        return redirect()->route('service-requests.index')
            ->with('success', 'درخواست سرویس با موفقیت بروزرسانی شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
