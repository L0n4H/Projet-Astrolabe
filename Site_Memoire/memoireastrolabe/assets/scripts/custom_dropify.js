require('dropify');
const $ = require('jquery');

$('.dropify').dropify({
    messages: {
      'default': 'Glisser-déposer un fichier ici ou cliquer',
      'replace': 'Glisser-déposer ou cliquer pour remplacer',
      'remove':  'Supprimer',
      'error':   'Oups, un problème est survenu.'
    }, 
    tpl: {
      wrap:            '<div class="dropify-wrapper"></div>',
      loader:          '<div class="dropify-loader"></div>',
      message:         '<div class="dropify-message"><span class="file-icon" /> <p class="fs-6">{{ default }}</p></div>',
      preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ replace }}</p></div></div></div>',
      filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
      clearButton:     '<button type="button" class="dropify-clear">{{ remove }}</button>',
      errorLine:       '<p class="dropify-error">{{ error }}</p>',
      errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
    }, 
    error: {
      'fileSize': 'Le fichier ({{ value }} est trop volumineux).',
      'imageFormat': 'Seuls ces formats ({{ value }} sont autorisés).'
    }
});
