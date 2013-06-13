<?php

 /**
  *  YunoHost - Self-hosting for all
  *  Copyright (C) 2013  Kload <kload@kload.fr>
  *
  *  This program is free software: you can redistribute it and/or modify
  *  it under the terms of the GNU Affero General Public License as
  *  published by the Free Software Foundation, either version 3 of the
  *  License, or (at your option) any later version.
  *
  *  This program is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU Affero General Public License for more details.
  *
  *  You should have received a copy of the GNU Affero General Public License
  *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
  */


/**
 * => controllers/other.php
 */
dispatch('/', 'home');
dispatch('/login', 'login');
dispatch_post('/login', 'doLogin');
dispatch('/logout', 'logout');
dispatch('/postinstall', 'postInstall');
dispatch_post('/postinstall', 'doPostInstall');
dispatch('/lang/:locale', 'changeLocale');
dispatch('/images/:name/:size', 'image_show');
dispatch('/images/*.jpg/:size', 'image_show_jpeg_only');
//dispatch('/ping/:apps', 'ping');

/**
 * => controllers/domain.php
 */
dispatch('/domain', 'domains');
dispatch('/domain/list', 'listDomains');
dispatch('/domain/add', 'addDomainForm');
dispatch_put('/domain/update', 'updateDomains');
//dispatch('/domain/changeMain', 'changeMainForm');
//dispatch_put('/domain/changeMain', 'changeMain');

/**
 * => controllers/app.php
 */
//dispatch('/app', 'apps');
//dispatch('/app/list', 'listApps');
//dispatch('/app/:operation/:app', 'operateApp');
//dispatch('/app/:operation/:app/ajax', 'operateAppAjax');

/**
 * => controllers/user.php
 */
dispatch('/user', 'user');
dispatch('/user/list', 'listUser');
dispatch('/user/details/:user', 'userDetails');
dispatch('/user/add', 'addUserForm');
dispatch_post('/user/add', 'addUser');
dispatch('/user/delete/:user', 'deleteUserForm');
dispatch_delete('/user/delete', 'deleteUser');
//dispatch('/user/update/:user', 'updateUserForm');
//dispatch_put('/user/update/:user', 'updateUser');
//dispatch('/user/mailaliases/:user', 'updateMailAliasesUserForm');
//dispatch_put('/user/mailaliases/:user', 'updateMailAliasesUser');
//dispatch('/user/password/:user', 'updatePasswordUserForm');
//dispatch_put('/user/password/:user', 'updatePasswordUser');

/**
 * => controllers/tools.php
 */
//dispatch('/tools', 'tools');
//dispatch('/tools/log/:service/:logFile', 'watchLog');
//dispatch('/tools/chat', 'getChat');
//dispatch('/tools/chat/enable', 'enableChat');
//dispatch('/tools/chat/disable', 'disableChat');
//dispatch('/tools/monitor', 'systemMonitor');
//dispatch('/tools/tasks', 'tasksManager');
//dispatch('/tools/upgrade/number', 'getUpgradeNumber');
//dispatch('/tools/upgrade', 'upgradeConfirm');
//dispatch('/tools/upgrade/packages', 'upgradeAjax');
//dispatch_post('/tools/upgrade/packages', 'upgradeAjax');
//dispatch('/tools/activate/:service', 'activateService');
//dispatch('/tools/deactivate/:service', 'deactivateService');
