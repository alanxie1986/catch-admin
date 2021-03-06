<?php

use think\migration\Seeder;

class WechatPermissionSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        \catcher\Utils::importTreeData($this->getPermissions(), 'permissions', 'parent_id');
    }

    protected function getPermissions()
    {
       return array (
  0 => 
  array (
    'id' => 66,
    'permission_name' => '微信管理',
    'parent_id' => 0,
    'level' => '',
    'route' => '/wechat',
    'icon' => 'wechat',
    'module' => 'wechat',
    'creator_id' => 1,
    'method' => 'get',
    'permission_mark' => 'wechat',
    'component' => 'routeView',
    'redirect' => '',
    'hide_children_in_menu' => 2,
    'keepalive' => 1,
    'type' => 1,
    'status' => 1,
    'sort' => 1,
    'created_at' => 1591603025,
    'updated_at' => 1593044101,
    'deleted_at' => 0,
    'children' => 
    array (
      0 => 
      array (
        'id' => 67,
        'permission_name' => '微信菜单',
        'parent_id' => 66,
        'level' => '66',
        'route' => '/wechat/menus',
        'icon' => 'table',
        'module' => 'wechat',
        'creator_id' => 1,
        'method' => 'get',
        'permission_mark' => 'menus',
        'component' => 'menus',
        'redirect' => '',
        'hide_children_in_menu' => 2,
        'keepalive' => 1,
        'type' => 1,
        'status' => 1,
        'sort' => 1,
        'created_at' => 1591603088,
        'updated_at' => 1591603427,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 95,
            'permission_name' => '列表',
            'parent_id' => 67,
            'level' => '66-67',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'menus@index',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304908,
            'updated_at' => 1593304908,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 96,
            'permission_name' => '保存',
            'parent_id' => 67,
            'level' => '66-67',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'menus@save',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304915,
            'updated_at' => 1593304915,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 97,
            'permission_name' => '更新',
            'parent_id' => 67,
            'level' => '66-67',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'menus@update',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304923,
            'updated_at' => 1593304923,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 98,
            'permission_name' => '删除',
            'parent_id' => 67,
            'level' => '66-67',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'menus@delete',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304929,
            'updated_at' => 1593304929,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 99,
            'permission_name' => '同步',
            'parent_id' => 67,
            'level' => '66-67',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'menus@sync',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304938,
            'updated_at' => 1593304938,
            'deleted_at' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'id' => 75,
        'permission_name' => '用户管理',
        'parent_id' => 66,
        'level' => '66',
        'route' => '/wechat/users',
        'icon' => 'team',
        'module' => 'wechat',
        'creator_id' => 1,
        'method' => 'get',
        'permission_mark' => 'users',
        'component' => 'pageView',
        'redirect' => '',
        'hide_children_in_menu' => 2,
        'keepalive' => 1,
        'type' => 1,
        'status' => 1,
        'sort' => 1,
        'created_at' => 1592624761,
        'updated_at' => 1592631716,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 76,
            'permission_name' => '微信用户',
            'parent_id' => 75,
            'level' => '66-75',
            'route' => '/wechat/users',
            'icon' => 'user',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'users',
            'component' => 'wechatUsers',
            'redirect' => '',
            'hide_children_in_menu' => 2,
            'keepalive' => 1,
            'type' => 1,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1592624799,
            'updated_at' => 1592624799,
            'deleted_at' => 0,
            'children' => 
            array (
              0 => 
              array (
                'id' => 90,
                'permission_name' => '列表',
                'parent_id' => 76,
                'level' => '66-75-76',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'users@index',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304869,
                'updated_at' => 1593304869,
                'deleted_at' => 0,
              ),
              1 => 
              array (
                'id' => 91,
                'permission_name' => '标记',
                'parent_id' => 76,
                'level' => '66-75-76',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'users@remark',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304876,
                'updated_at' => 1593304876,
                'deleted_at' => 0,
              ),
              2 => 
              array (
                'id' => 92,
                'permission_name' => '拉黑',
                'parent_id' => 76,
                'level' => '66-75-76',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'users@block',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304884,
                'updated_at' => 1593304884,
                'deleted_at' => 0,
              ),
              3 => 
              array (
                'id' => 93,
                'permission_name' => '打标签',
                'parent_id' => 76,
                'level' => '66-75-76',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'users@tag',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304892,
                'updated_at' => 1593304892,
                'deleted_at' => 0,
              ),
              4 => 
              array (
                'id' => 94,
                'permission_name' => '同步',
                'parent_id' => 76,
                'level' => '66-75-76',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'users@sync',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304900,
                'updated_at' => 1593304900,
                'deleted_at' => 0,
              ),
            ),
          ),
          1 => 
          array (
            'id' => 77,
            'permission_name' => '微信标签',
            'parent_id' => 75,
            'level' => '66-75',
            'route' => '/wechat/tags',
            'icon' => 'tags',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'tags',
            'component' => 'wechatTags',
            'redirect' => '',
            'hide_children_in_menu' => 2,
            'keepalive' => 1,
            'type' => 1,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1592722634,
            'updated_at' => 1593304802,
            'deleted_at' => 0,
            'children' => 
            array (
              0 => 
              array (
                'id' => 84,
                'permission_name' => '列表',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'wechatTags@index',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304575,
                'updated_at' => 1593304575,
                'deleted_at' => 0,
              ),
              1 => 
              array (
                'id' => 85,
                'permission_name' => '新增',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'wechatTags@save',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304592,
                'updated_at' => 1593304592,
                'deleted_at' => 0,
              ),
              2 => 
              array (
                'id' => 86,
                'permission_name' => '获取',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'tags@read',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304830,
                'updated_at' => 1593304830,
                'deleted_at' => 0,
              ),
              3 => 
              array (
                'id' => 87,
                'permission_name' => '更新',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'tags@update',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304837,
                'updated_at' => 1593304837,
                'deleted_at' => 0,
              ),
              4 => 
              array (
                'id' => 88,
                'permission_name' => '删除',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'tags@delete',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304846,
                'updated_at' => 1593304846,
                'deleted_at' => 0,
              ),
              5 => 
              array (
                'id' => 89,
                'permission_name' => '同步',
                'parent_id' => 77,
                'level' => '66-75-77',
                'route' => '',
                'icon' => '',
                'module' => 'wechat',
                'creator_id' => 1,
                'method' => 'get',
                'permission_mark' => 'tags@sync',
                'component' => '',
                'redirect' => '',
                'hide_children_in_menu' => 1,
                'keepalive' => 1,
                'type' => 2,
                'status' => 1,
                'sort' => 1,
                'created_at' => 1593304859,
                'updated_at' => 1593304859,
                'deleted_at' => 0,
              ),
            ),
          ),
        ),
      ),
      2 => 
      array (
        'id' => 78,
        'permission_name' => '图文管理',
        'parent_id' => 66,
        'level' => '66',
        'route' => '/wechat/graphic',
        'icon' => 'gold',
        'module' => 'wechat',
        'creator_id' => 1,
        'method' => 'get',
        'permission_mark' => 'graphic',
        'component' => 'wechatGraphic',
        'redirect' => '',
        'hide_children_in_menu' => 2,
        'keepalive' => 1,
        'type' => 1,
        'status' => 1,
        'sort' => 1,
        'created_at' => 1593227704,
        'updated_at' => 1593227704,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 79,
            'permission_name' => '新增',
            'parent_id' => 78,
            'level' => '66-78',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'graphic@save',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304490,
            'updated_at' => 1593304490,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 80,
            'permission_name' => '获取',
            'parent_id' => 78,
            'level' => '66-78',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'graphic@read',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304510,
            'updated_at' => 1593304510,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 81,
            'permission_name' => '列表',
            'parent_id' => 78,
            'level' => '66-78',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'graphic@index',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 2,
            'created_at' => 1593304520,
            'updated_at' => 1593304520,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 82,
            'permission_name' => '更新',
            'parent_id' => 78,
            'level' => '66-78',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'graphic@update',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304530,
            'updated_at' => 1593304530,
            'deleted_at' => 0,
          ),
          4 => 
          array (
            'id' => 83,
            'permission_name' => '删除',
            'parent_id' => 78,
            'level' => '66-78',
            'route' => '',
            'icon' => '',
            'module' => 'wechat',
            'creator_id' => 1,
            'method' => 'get',
            'permission_mark' => 'graphic@delete',
            'component' => '',
            'redirect' => '',
            'hide_children_in_menu' => 1,
            'keepalive' => 1,
            'type' => 2,
            'status' => 1,
            'sort' => 1,
            'created_at' => 1593304537,
            'updated_at' => 1593304537,
            'deleted_at' => 0,
          ),
        ),
      ),
    ),
  ),
);
    }
}
