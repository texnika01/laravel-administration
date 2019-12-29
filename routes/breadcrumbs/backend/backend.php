<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

// Home > Messages
Breadcrumbs::register('admin.messages', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Messages', route('admin.messages'));
});
Breadcrumbs::register('admin.messages.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Messages Create', route('admin.messages.create'));
});
Breadcrumbs::register('admin.messages.show', function ($breadcrumbs,$id) {
	$breadcrumbs->parent('admin.messages');
	$thread = Cmgmyr\Messenger\Models\Thread::findOrFail($id);
	$breadcrumbs->push($thread->subject, route('admin.messages.show',$thread));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
