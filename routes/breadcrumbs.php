<?php

// ============= BLOG ===========
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('Blog', route('blog.home'));
});

// Blog > Home
Breadcrumbs::for('blog_home', function ($trail) {
    $trail->parent('blog');
    $trail->push('Home', route('blog.home'));
});

// Blog > Categories
Breadcrumbs::for('blog_categories', function ($trail) {
    $trail->parent('blog');
    $trail->push('Categories', route('blog.categories'));
});

// Blog > Categories > [Title]
Breadcrumbs::for('blog_posts_category', function ($trail, $title) {
    $trail->parent('blog');
    $trail->push('Categories', route('blog.categories'));
    $trail->push($title, '#');
});

// Blog > Tags
Breadcrumbs::for('blog_tags', function ($trail) {
    $trail->parent('blog');
    $trail->push('Tags', route('blog.tags'));
});

// Blog > Tags > [Title]
Breadcrumbs::for('blog_posts_tag', function ($trail, $title) {
    $trail->parent('blog');
    $trail->push('Tags', route('blog.tags'));
    $trail->push($title, '#');
});

// Blog > Search
Breadcrumbs::for('blog_search', function ($trail,$keyword) {
    $trail->parent('blog');
    $trail->push('Search', route('blog.search'));
    $trail->push($keyword, route('blog.search'));
});

// ============= DASHBOARD ============
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Dashboard > Home
Breadcrumbs::for('dashboard_home', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '#');
});

// Dashboard > Categories
Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});

// Dashboard > Categories > add
Breadcrumbs::for('add_category', function ($trail) {
    $trail->parent('categories');
    $trail->push('Add', route('categories.create'));
});

// Dashboard > Categories > Edit
Breadcrumbs::for('edit_category', function ($trail,$category) {
    $trail->parent('categories');
    $trail->push('Edit', route('categories.edit', ['category' => $category]));
});

// Dashboard > Categories > Edit > [title]
Breadcrumbs::for('edit_category_title', function ($trail,$category) {
    $trail->parent('edit_category', $category);
    $trail->push($category->title, route('categories.edit', ['category' => $category]));
});

// Dashboard > Categories > Detail
Breadcrumbs::for('detail_category', function ($trail,$category) {
    $trail->parent('categories');
    $trail->push('Detail', route('categories.show', ['category' => $category]));
});

// Dashboard > Categories > Detail > [title]
Breadcrumbs::for('detail_category_title', function ($trail,$category) {
    $trail->parent('detail_category', $category);
    $trail->push($category->title, route('categories.show', ['category' => $category]));
});

// Dashboard > Tags
Breadcrumbs::for('tags', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Tags', route('tags.index'));
});

// Dashboard > Tags > Add
Breadcrumbs::for('add_tag', function ($trail) {
    $trail->parent('tags');
    $trail->push('Add', route('tags.create'));
});

// Dashboard > Tags > Edit > [title]
Breadcrumbs::for('edit_tag', function ($trail, $tag) {
    $trail->parent('tags');
    $trail->push('Edit', route('tags.edit', ['tag' => $tag]));
    $trail->push($tag->title, route('tags.edit', ['tag' => $tag]));
});

// Dashboard > Post
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Posts', route('posts.index'));
});

// Dashboard > Post > Add
Breadcrumbs::for('add_post', function ($trail) {
    $trail->parent('posts');
    $trail->push('Add', route('posts.create'));
});

// Dashboard > Post > Detail > [title]
Breadcrumbs::for('detail_post', function ($trail,$post) {
    $trail->parent('posts');
    $trail->push('Detail', route('posts.show',['post' => $post]));
    $trail->push($post->title, route('posts.show',['post' => $post]));
});

// Dashboard > Post > Edit > [title]
Breadcrumbs::for('edit_post', function ($trail,$post) {
    $trail->parent('posts');
    $trail->push('Edit', route('posts.edit',['post' => $post]));
    $trail->push($post->title, route('posts.show',['post' => $post]));
});

// Dashboard > File manager
Breadcrumbs::for('file_manager', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('File manager', route('filemanager.index'));
});

// Dashboard > Roles
Breadcrumbs::for('roles', function ($trail) {
    $trail->parent('dashboard');
    $trail->push("Roles", route('posts.index'));
});

// Dashboard > Roles > Add
Breadcrumbs::for('add_role', function ($trail) {
    $trail->parent('roles');
    $trail->push("Add", route('roles.create'));
});

// Dashboard > Roles > Detail > [name]
Breadcrumbs::for('detail_role', function ($trail,$role) {
    $trail->parent('roles');
    $trail->push('Detail', route('roles.show',['role' => $role]));
    $trail->push($role->name, route('roles.show',['role' => $role]));
});

// Dashboard > Roles > Edit > [name]
Breadcrumbs::for('edit_role', function ($trail,$role) {
    $trail->parent('roles');
    $trail->push('Edit', route('roles.edit',['role' => $role]));
    $trail->push($role->name, route('roles.edit',['role' => $role]));
});

// Dashboard > Users
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push("Users", route('users.index'));
});

// Dashboard > Users > Add
Breadcrumbs::for('add_user', function ($trail) {
    $trail->parent('users');
    $trail->push("Add", route('users.create'));
});

// Dashboard > Users > Edit > [name]
Breadcrumbs::for('edit_user', function ($trail,$user) {
    $trail->parent('users');
    $trail->push('Edit', route('users.edit',['user' => $user]));
    $trail->push($user->name, route('users.edit',['user' => $user]));
});