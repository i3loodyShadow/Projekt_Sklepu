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
Utils::addRoute('productEdit', 'ProductCtrl',['admin']);
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

Utils::addRoute('NewProcessor', 'ProcessorEditCtrl', ['admin']);
Utils::addRoute('processorSave', 'ProcessorEditCtrl', ['admin']);
Utils::addRoute('processorEdit', 'ProcessorEditCtrl', ['admin']);

Utils::addRoute('NewGC', 'GCEditCtrl', ['admin']);
Utils::addRoute('GCSave', 'GCEditCtrl', ['admin']);
Utils::addRoute('GCEdit', 'GCEditCtrl', ['admin']);

Utils::addRoute('NewMoBo', 'MoBoEditCtrl', ['admin']);
Utils::addRoute('MoBoSave', 'MoBoEditCtrl', ['admin']);
Utils::addRoute('MoBoEdit', 'MoBoEditCtrl', ['admin']);

Utils::addRoute('NewRAM', 'RAMEditCtrl', ['admin']);
Utils::addRoute('RAMSave', 'RAMEditCtrl', ['admin']);
Utils::addRoute('RAMEdit', 'RAMEditCtrl', ['admin']);

Utils::addRoute('NewHD', 'HDEditCtrl', ['admin']);
Utils::addRoute('HDSave', 'HDEditCtrl', ['admin']);
Utils::addRoute('HDEdit', 'HDEditCtrl', ['admin']);

Utils::addRoute('NewPS', 'PSEditCtrl', ['admin']);
Utils::addRoute('PSSave', 'PSEditCtrl', ['admin']);
Utils::addRoute('PSEdit', 'PSEditCtrl', ['admin']);

Utils::addRoute('NewCase', 'CaseEditCtrl', ['admin']);
Utils::addRoute('CaseSave', 'CaseEditCtrl', ['admin']);
Utils::addRoute('CaseEdit', 'CaseEditCtrl', ['admin']);