// فقط بارگذاری فایل side-effect، نه import default
import 'ckeditor4/ckeditor.js';

export function initCKEditor(textareaId, managerUrl, uploadUrl) {
  if (!window.CKEDITOR) {
    console.error('CKEDITOR is not loaded');
    return;
  }
  window.CKEDITOR.replace(textareaId, {
    filebrowserImageBrowseUrl: managerUrl,
    filebrowserImageUploadUrl: uploadUrl,
    height: 300,
    toolbar: [
      { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
      { name: 'insert', items: ['Image', 'Link', 'Unlink'] },
      { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
      { name: 'styles', items: ['Format', 'FontSize'] },
      { name: 'colors', items: ['TextColor', 'BGColor'] }
    ]
  });
}
