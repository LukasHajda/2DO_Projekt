<?php

/**
 * Get all activities which have trashed status from chosen date
 */

$activitiesInTrash = $DB->get_trashed_activities($_GET['date']);