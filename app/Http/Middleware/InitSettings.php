<?php
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use Auth; use Closure; use App\Helpers\ListHelper; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\x69\x6e\163\x74\x61\x6c\x6c\x2a")) { goto JbpUK; } return $next($request); JbpUK: setSystemConfig(); if (!Auth::guard("\167\x65\142")->check()) { goto gFO9n; } if (!$request->is("\x61\144\155\x69\x6e\57\52")) { goto cIcom; } $this->can_load(); cIcom: if (!$request->session()->has("\151\155\160\145\x72\163\157\x6e\x61\x74\x65\x64")) { goto AltNw; } Auth::onceUsingId($request->session()->get("\151\155\160\145\162\x73\x6f\156\x61\164\x65\x64")); AltNw: if (!(!Auth::guard("\167\145\x62")->user()->isFromPlatform() && Auth::guard("\x77\x65\142")->user()->merchantId())) { goto JRUHs; } setShopConfig(Auth::guard("\x77\x65\x62")->user()->merchantId()); JRUHs: $permissions = ListHelper::authorizations(); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\160\145\162\x6d\151\x73\163\x69\x6f\156\163", $permissions); if (!Auth::guard("\x77\x65\142")->user()->isSuperAdmin()) { goto xs1P7; } $slugs = ListHelper::slugsWithModulAccess(); config()->set("\x61\165\x74\150\123\x6c\165\147\x73", $slugs); xs1P7: gFO9n: if ($request->ajax()) { goto hQlyc; } updateVisitorTable($request); hQlyc: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\x30\x31\67\142\x66\70\x62\143\x38\70\x35\x66\x62\63\67\142" || md5_file(base_path() . "\x2f\x62\157\x6f\164\x73\x74\x72\x61\160\x2f\x61\x75\x74\x6f\x6c\157\x61\144\x2e\160\x68\x70") != "\71\64\x64\71\141\x31\61\142\x38\142\x34\142\66\61\x37\x39\x31\141\x64\x33\x39\x39\x36\x30\70\x37\62\x31\x37\x64\144\x30")) { goto iyz30; } die("\x44\x69\x64\x20\171\x6f\165\40" . "\x72\x65\x6d\x6f\166\145\40\164\150\x65\40" . "\x6f\154\144\x20\x66\151\154\145\x73\40" . "\x21\77"); iyz30: incevioAutoloadHelpers(getMysqliConnection()); } }