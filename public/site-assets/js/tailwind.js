tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
                'vazir': ['Vazirmatn', 'sans-serif'],
            },
            colors: {
                primary: '#2563eb',
                secondary: '#10b981',
                accent: '#f0f9ff',
                'text-dark': '#1f2937',
                'text-medium': '#374151',
                'text-light': '#6b7280',
                'text-lighter': '#9ca3af',
                'border-color': '#e5e7eb',
            },
            boxShadow: {
                'custom': '0 1px 3px rgba(0, 0, 0, 0.1)',
                'custom-light': '0 4px 6px rgba(0, 0, 0, 0.05)',
            },
            animation: {
                'slide-in-right': 'slideInRight 0.3s ease-out',
            },
            keyframes: {
                slideInRight: {
                    '0%': {
                        transform: 'translateX(100%)'
                    },
                    '100%': {
                        transform: 'translateX(0)'
                    },
                }
            }
        },
    }
}
