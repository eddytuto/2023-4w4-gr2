<?php


wp_enqueue_style(   'style-principale',
                    get_template_directory_uri() . '/style.css',
                    array(),
                    filemtime(get_template_directory() . '/style.css')
                );