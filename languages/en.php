<?php

return array(
  'title' => 'English',
  'author' => 'Bastian Allgeier <bastian@getkirby.com>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'Cancel',
    'add' => 'Add',
    'save' => 'Save',
    'delete' => 'Delete',
    'ok' => 'Ok',

    // installation
    'installation.check.headline' => 'Kirby Panel Installation',
    'installation.check.text' => 'Kirby encountered the following issues:',
    'installation.check.retry' => 'Retry',
    'installation.signup.headline' => 'Create your first account',
    'installation.signup.username' => 'Username',
    'installation.signup.email' => 'Email',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.password' => 'Password',
    'installation.signup.create' => 'Create your account',
    'installation.signup.success' => 'Your account has been created',

    // app
    'app.health.error' => 'There are some issues!',
    'app.health.error.accounts' => 'site/accounts is not writable',
    'app.health.error.avatars' => '/assets/avatars is not writable',
    'app.health.error.blueprints' => 'Please add a site/blueprints folder',
    'app.health.error.content' => 'The content folder and all contained files and folders must be writable.',
    'app.health.error.thumbs' => 'The thumbs folder must be writable.',
    'app.health.success' => 'Everything is fine',

    // login
    'login.title' => 'Login',
    'login.username' => 'Username',
    'login.password' => 'Password',
    'login.error' => 'Invalid username or password',
    'login.success' => 'You are now logged in',
    'login.button' => 'Login',

    // site
    'site.title' => 'Site',
    'site.settings' => 'Site settings',
    'site.publish' => 'Publish changes',
    'site.languages.error' => 'This is a single-language site',

    // subpages
    'subpages.title' => 'Subpages',
    'subpages.add' => 'Add a new subpage',
    'subpages.manage' => 'manage',
    'subpages.search.placeholder' => 'Search for a subpage',
    'subpages.show' => 'Show all',
    'subpages.empty' => 'This page has no subpages',

    // metatags
    'metatags.title' => 'Metatags',
    'metatags.edit' => 'Edit metatags',
    'metatags.cancel' => 'Go to dashboard',

    // files
    'files.title' => 'Files',
    'files.manage' => 'manage',
    'files.upload' => 'Upload a new file',
    'files.empty' => 'This page has no files',
    'files.show.error' => 'The file could not be found',
    'files.manager.headline' => 'Manage Files for',
    'files.manager.back' => 'Back to page',
    'files.manager.upload' => 'Upload a new file',
    'files.manager.upload.first' => 'Upload your first file',
    'files.manager.edit' => 'Edit',
    'files.manager.delete' => 'Delete',
    'files.delete.headline' => 'Do you really want to delete this file?',
    'files.delete.error.missing' => 'The file could not be found',
    'files.delete.success' => 'The file has been deleted',
    'files.edit.filename' => 'Filename',
    'files.edit.replace' => 'Replace',
    'files.edit.delete' => 'Delete',
    'files.edit.typeAndSize' => 'Type / size',
    'files.edit.link' => 'Public link',
    'files.replace.headline' => 'Replace',
    'files.replace.drop' => 'Drop a file here…',
    'files.replace.click' => '…or click to replace this file',
    'files.replace.error.type' => 'The uploaded file must have the same file type',
    'files.replace.success' => 'The file has been replaced',
    'files.rename.error' => 'The file could not be renamed',
    'files.rename.error.missing' => 'The file could not be found',
    'files.rename.success' => 'The file has been renamed',
    'files.update.error.page' => 'The page could not be found',
    'files.update.error.missing' => 'The file could not be found',
    'files.update.success' => 'The file has been updated',
    'files.upload.drop' => 'Drop files here…',
    'files.upload.click' => '…or click to upload',
    'files.upload.success' => 'The file(s) have been uploaded',

    // error page
    'errorpage.title' => 'Error page',
    'errorpage.text'  => 'This is your site\'s error page. Your visitors will see this whenever they enter a URL, which is not available.',

    // unwritable
    'unwritable.title' => 'The page is not writable',
    'unwritable.text'  => 'Please check the permissions for the content folder and all files.',

    // pages
    'pages.changeUrl' => 'Change URL',
    'pages.settings' => 'Page settings',
    'pages.form.error.nocontent.headline' => 'This page has no content',
    'pages.form.error.nocontent.text' => 'Please create a content text file on the server manually',
    'pages.show.error' => 'The page could not be found',
    'pages.delete' => 'Delete page',
    'pages.delete.headline' => 'Do you really want to delete this page?',
    'pages.delete.error.missing' => 'The page could not be found',
    'pages.delete.success' => 'The page has been deleted',
    'pages.delete.url' => 'URL',
    'pages.template' => 'Template',
    'pages.add.headline' => 'Add a new subpage',
    'pages.add.title.placeholder' => 'Title',
    'pages.add.url' => 'URL-appendix',
    'pages.add.url.enter' => '(enter your title)',
    'pages.add.url.close' => 'Close',
    'pages.add.url.help' => 'Format: lowercase a-z, 0-9 and regular dashes',
    'pages.add.template' => 'Template',
    'pages.add.template.select' => 'Select a template',
    'pages.add.error.title' => 'The title is missing',
    'pages.add.error.template' => 'The template is missing',
    'pages.add.success' => 'The page has been created',
    'pages.update.error.missing' => 'The page could not be found',
    'pages.update.success' => 'The page has been updated',
    'pages.sort.success' => 'The pages have been sorted',
    'pages.hide.error.missing' => 'The page could not be found',
    'pages.hide.success' => 'The page is now invisible',
    'pages.templates.error.missing' => 'The page could not be found',
    'pages.templates.error.nosubpages' => 'The page is not allowed to have subpages',
    'pages.publish.headline' => 'Publishing changes',
    'pages.publish.text' => 'Please wait a second. Your latest changes are being submitted to the server.',
    'pages.url.headline' => 'URL-appendix',
    'pages.url.createFromTitle' => 'Create from title',
    'pages.url.error.missing' => 'The page could not be found',
    'pages.url.error.exists' => 'A page with the same appendix already exists',
    'pages.url.error.move' => 'The appendix could not be changed',
    'pages.url.idle' => 'The URL-appendix has not changed',
    'pages.url.success' => 'The URL-appendix has been changed',
    'pages.manager.headline' => 'Manage subpages for',
    'pages.manager.back' => 'Back to page',
    'pages.manager.add' => 'Add a new subpage',
    'pages.manager.add.first' => 'Add your first subpage',
    'pages.manager.visible' => 'Visible subpages',
    'pages.manager.visible.help' => 'Drag pages from the right here to sort them/make them visible.',
    'pages.manager.invisible' => 'Invisible subpages',
    'pages.manager.invisible.help' => 'Drag pages from the left here to unsort them/make them invisible.',

    // users
    'users.title' => 'Users',
    'users.index.headline' => 'Manage all users',
    'users.index.add' => 'Add a new user',
    'users.index.edit' => 'edit',
    'users.index.delete' => 'delete',
    'users.show.error.missing' => 'The user could not be found',
    'users.add.username' => 'Username',
    'users.add.username.placeholder' => 'Your username',
    'users.add.username.help' => 'Allowed characters: lowercase a-z, 0-9 and dashes',
    'users.add.email' => 'Email',
    'users.add.email.placeholder' => 'mail@example.com',
    'users.add.password' => 'Password',
    'users.add.language' => 'Language',
    'users.edit.username' => 'Username',
    'users.edit.email' => 'Email',
    'users.edit.email.placeholder' => 'mail@example.com',
    'users.edit.password' => 'Password',
    'users.edit.language' => 'Language',
    'users.edit.error' => 'The user could not be updated',
    'users.edit.error.missing' => 'The user could not be found',
    'users.edit.success' => 'The user has been updated',
    'users.delete.headline' => 'Do you really want to delete this user?',
    'users.delete.error.missing' => 'The user could not be found',
    'users.delete.success' => 'The user has been deleted',
    'users.avatar.drop' => 'Drop a profile picture here…',
    'users.avatar.click' => '…or click to upload',
    'users.avatar.error.missing' => 'The user could not be found',
    'users.avatar.error.type' => 'You can only upload JPG, PNG and GIF files',
    'users.avatar.error.folder.headline' => 'The avatar folder is not writable',
    'users.avatar.error.folder.text' => 'Please create the folder <strong>/assets/avatars</strong> and make it writable to upload profile pictures.',
    'users.avatar.success' => 'The profile picture has been uploaded',
    'users.avatar.delete.error' => 'The profile picture could not be deleted',
    'users.avatar.delete.error.missing' => 'The user could not be found',
    'users.avatar.delete.success' => 'The profile picture has been deleted',

    // logout
    'logout' => 'Logout'

  )
);