<?php

namespace App\Enums;


enum PermissionEnum: string
{

    case ADMIN = "admin";

    case USER_ALL = "user.all";
    case USER_INDEX = "user.index";
    case USER_SHOW = "user.show";
    case USER_STORE = "user.store";
    case USER_UPDATE = "user.update";
    case USER_TOGGLE = "user.toggle";
    case USER_DELETE = "user.delete";
    case USER_RESTORE = "user.restore";


    case CATEGORY_ALL = "category.all";
    case CATEGORY_INDEX = "category.index";
    case CATEGORY_SHOW = "category.show";
    case CATEGORY_STORE = "category.store";
    case CATEGORY_UPDATE = "category.update";
    case CATEGORY_TOGGLE = "category.toggle";
    case CATEGORY_DELETE = "category.delete";
    case CATEGORY_RESTORE = "category.restore";


    case PRODUCT_ALL = "prodect.all";
    case PRODUCT_INDEX = "prodect.index";
    case PRODUCT_SHOW = "prodect.show";
    case PRODUCT_STORE = "prodect.store";
    case PRODUCT_UPDATE = "prodect.update";
    case PRODUCT_TOGGLE = "prodect.toggle";
    case PRODUCT_DELETE = "prodect.delete";
    case PRODUCT_RESTORE = "prodect.restore";


    case ROLE_ALL = "role.all";
    case ROLE_INDEX = "role.index";
    case ROLE_SHOW = "role.show";
    case ROLE_STORE = "role.store";
    case ROLE_UPDATE = "role.update";
    case ROLE_TOGGLE = "role.toggle";
    case ROLE_DELETE = "role.delete";
    case ROLE_RESTORE = "role.restore";
    case ROLE_ADD = "role.add";
    case ROLE_REMOVE = "role.remove";

}
