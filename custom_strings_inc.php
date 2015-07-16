<?php
switch( $g_active_language ) {
	case 'german':
		$s_faction_no = 'Partei';
		$s_game_no = 'Spiel';
		$s_report_no = 'Report #';
		break;
	case 'english':
		$s_faction_no = 'Faction';
		$s_game_no = 'Game';
		$s_report_no = 'Report #';
		break;

	default:
		# Default language, as defined in config_inc.php
		# ($g_default_language, English in this case)
		$s_faction_no = 'Faction';
		$s_game_no = 'Game';
		$s_report_no = 'Report #';
		break;
}
