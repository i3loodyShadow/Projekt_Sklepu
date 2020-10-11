<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('NavigateShow'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('Login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('Register', 'RegisterCtrl');
Utils::addRoute('Login', 'LoginCtrl');
Utils::addRoute('Logout', 'LoginCtrl');

Utils::addRoute('NavigateShow', 'NavigateCtrl');
Utils::addRoute('NavigateLogIn', 'NavigateCtrl');
Utils::addRoute('NavigateLogOut', 'NavigateCtrl');
Utils::addRoute('backFromService', 'NavigateCtrl');

Utils::addRoute('ProductView', 'ProductCtrl');
Utils::addRoute('ProductPartView', 'ProductCtrl');
Utils::addRoute('ProductEdition', 'ProductCtrl');
Utils::addRoute('ProductDetails', 'ProductCtrl');
Utils::addRoute('productDetails', 'ProductDetailsCtrl');

Utils::addRoute('NewProduct', 'ProductNewCtrl');
Utils::addRoute('ProductSave', 'ProductNewCtrl');

Utils::addRoute('addParameter', 'ProductEditCtrl');
Utils::addRoute('productEdit', 'ProductEditCtrl',['admin']);
Utils::addRoute('productDelete', 'ProductCtrl',['admin']);

Utils::addRoute('passEdit', 'AccountCtrl',['user','admin']);
Utils::addRoute('accountEdit', 'AccountCtrl',['user','admin']);
Utils::addRoute('passEdit', 'AccountCtrl',['user','admin']);
Utils::addRoute('emailEdit', 'AccountCtrl',['user','admin']);

Utils::addRoute('AdminView', 'AdminCtrl', ['admin']);
Utils::addRoute('usersAccountsView', 'AdminCtrl',['admin']);
Utils::addRoute('usersAccountsPartView', 'AdminCtrl',['admin']);
Utils::addRoute('accountDelete', 'AdminCtrl',['admin']);
Utils::addRoute('backToAdminNavigator', 'AdminCtrl', ['admin']);

Utils::addRoute('addToShoppingCart', 'ProductCtrl', ['user']);
Utils::addRoute('ShoppingCartView', 'ShoppingCartCtrl', ['user']);
Utils::addRoute('deleteFromSC', 'ShoppingCartCtrl', ['user']);
