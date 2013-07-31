<?php defined("SYSPATH") or die("No direct script access.");
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2013 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
class html5_upload_progress_event_Core {

	static function add_photos_form($album, $form) {
		$form->hidden('g3sid')->value(Session::instance()->id());
		$form->hidden('user_agent')->value(Input::instance()->server("HTTP_USER_AGENT"));

		$group = $form->add_photos;
		$group->checkbox("show_preview")
		      ->label(t("Show file preview"))
		      ->checked(false);

		foreach ($form->inputs as $key => $input) {
			error_log(print_r($input, 1));
		}
	}
}
