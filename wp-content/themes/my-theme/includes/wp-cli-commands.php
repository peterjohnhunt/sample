<?php

class WP_CLI_Commands {

    /**
     * Import CSV
     * 
     * ## OPTIONS
     * <filename>
     * : The name of the file to import
     * 
     * [--format=<format>]
     * : Output format
     * ---
     * default: table
     * options:
     *   - table
     *   - csv
     *   - json
     * ---
     * 
     * ## EXAMPLES
     *    wp custom import
     * 
     * @subcommand import
     */
    function import($args, $assoc_args){
        list( $filename ) = $args;

        $format = $assoc_args['format'] ?? 'table';

        if ( ! file_exists($filename) ) {
            WP_CLI::error( "Missing file: {$filename}");
        }

        $results = [];

        $rows = new WP_CLI\Iterators\CSV($filename);
        foreach ($rows as $row) {
            $name = $row['First Name'].' '.$row['Last Name'];

            $results[] = [
                'Name'    => $name,
                'ID'      => '123',
                'Updated' => 'Yes'
            ];
        }

        WP_CLI\Utils\format_items($format, $results, ['ID', 'Name', 'Updated']);

        WP_CLI::success("Imported {$filename}!");
    }
}
WP_CLI::add_command( 'custom', 'WP_CLI_Commands' );