$(document).ready(function () {
  $('#task-modal').on('show.bs.modal', function (event) {
    const button = $(event.relatedTarget);
    const taskID = button.data('source');
    const content = button.data('content');

    const modal = $(this);

    if (taskID === 'New Task') {
      modal.find('.modal-title').text(taskID);
      $('#task-form-display').removeAttr('taskID');
    } else {
      modal.find('.modal-title').text('Edit Task ' + taskID);
      $('#task-form-display').attr('taskID', taskID);
    }

    if (content) {
      modal.find('.form-control').val(content);
    } else {
      modal.find('.form-control').val('');
    }
  })
})
