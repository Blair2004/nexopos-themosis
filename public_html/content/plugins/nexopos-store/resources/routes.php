<?php

use Themosis\Facades\Route;
use Themosis\Facades\Page;

/**
 * Plugin custom routes.
 */

$SettingsPage       =   Page::make( 'nexopos-store-settings', __( 'NexoPOS Store Settings', 'nexopos-store' ) )->set();