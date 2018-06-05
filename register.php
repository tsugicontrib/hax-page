<?php

$REGISTER_LTI2 = array(
"name" => "Hax-Page",
"FontAwesome" => "fa-edit",
"short_name" => "Hax-Page",
"description" => "This tool edits a page of HAX content.",
"messages" => array("launch"),
 "privacy_level" => "anonymous",  // anonymous, name_only, public
    "license" => "Apache",
    "languages" => array(
        "English"
    ),
    "analytics" => array(
        "internal"
    ),
    "source_url" => "https://github.com/tsugitools/hax-page",
    // For now Tsugi tools delegate this to /lti/store
    "placements" => array(
        /*
        "course_navigation", "homework_submission",
        "course_home_submission", "editor_button",
        "link_selection", "migration_selection", "resource_selection",
        "tool_configuration", "user_navigation"
        */
    )
);

