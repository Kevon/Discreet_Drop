function changeMethod(){confirm("Are you sure you want to delete this?")&&($('[name="_method"]').val("DELETE"),$(event.target).parents("form").submit())}function back(){window.history.go(-1)}