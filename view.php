
<?php
                $file = 'first.pdf';
                $filename = 'first.pdf';
                header('Content-type: application/pdf');
                header('Content-Disposition: inline; filename="' . $filename . '"');
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                @readfile($file);
        ?>