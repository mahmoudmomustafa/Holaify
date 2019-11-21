<?php
//main site
Route::get('/', function () {
    return view('site');
});
//cart
Route::get('/cart', function () {
    return view('main.cart');    
});
Route::get('/product', function () {
    return view('main.product');    
});
Route::get('/profile/orders', function () {
    return view('main.User.orders');   
});
Route::get('/profile/setting', function () {
    return view('main.User.setting');   
});
Route::get('/profile', function () {
    return view('main.User.profile');   
});
Route::get('/profile/edit', function () {
    return view('main.User.edit');   
});
Route::get('/collection', function () {
    return view('main.collection');    
});
//product
// Route::get('/{collection}/{product}', function () {
//     return view('main.product');
// });
// //collection
// Route::get('/collections/{collection}', function () {
//     return view('main.collection');
// });
// //search
// Route::get('/search/{search}', function () {
//     return view('main.search');
// });
Auth::routes();
// Dashboard
Route::get('/auth', 'DashboardController@index')->name('dashboard');
//orders
Route::get('/auth/orders', function () {
    return view('dashboard.orders.main');
})->name('orders');// all orders table
Route::get('/auth/orders/show', function () {
    return view('dashboard.orders.show');
})->name('order_show');// all order info
Route::get('/auth/checkouts', function () {
    return view('dashboard.orders.checkout');
})->name('checkouts'); //checkouts

//products
Route::get('/auth/products', function () {
    return view('dashboard.products.main');
})->name('products'); // all products table
Route::get('/auth/products/create', function () {
    return view('dashboard.products.create');
}); //create new product
Route::get('/auth/products/show', function () {
    return view('dashboard.products.show');
}); // show product info.

//collections
Route::get('/auth/collections', function () {
    return view('dashboard.products.collections.main');
})->name('collections'); // all collections table
Route::get('/auth/collections/create', function () {
    return view('dashboard.products.collections.create');
}); //create new collections
Route::get('/auth/collections/show', function () {
    return view('dashboard.products.collections.show');
}); // show collection info.

//admins
Route::get('/auth/admins', function () {
    return view('dashboard.users.admins.main');
})->name('admins'); // all adims table
Route::get('/auth/admins/create', function () {
    return view('dashboard.users.admins.create');
});//create new admin
Route::get('/auth/admins/show', function () {
    return view('dashboard.users.admins.show');
}); // show admin info.

//customers
Route::get('/auth/customers', function () {
    return view('dashboard.users.customers.main');
})->name('customers'); // all customers table
Route::get('/auth/customers/create', function () {
    return view('dashboard.users.customers.create');
}); //create new customers
Route::get('/auth/customers/show', function () {
    return view('dashboard.users.customers.show');
}); // show customers info.