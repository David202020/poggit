<?php

/*
 * Poggit
 *
 * Copyright (C) 2016-2017 Poggit
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace poggit\errdoc;

use poggit\Mbd;
use poggit\module\Module;

class FoundPage extends Module {
    public function getName(): string {
        return "err";
    }

    public function output() {
        http_response_code(302);
        ?>
        <html>
        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
            <?php Module::includeCss("style.min"); ?>
            <title>302 Found</title>
            <script>location.replace(<?= json_encode($this->getQuery()) ?>);</script>
            <meta http-equiv="refresh" content="0; url=<?= $this->getQuery() ?>"
        </head>
        <body>
        <div id="body">
            <h1>302 Found</h1>
            <p>You are being redirected. If the browser does not automatically redirect, please click
                <a href="<?= Mbd::esq($this->getQuery()) ?>">this link</a>.
            </p>
        </div>
        </body>
        </html>
        <?php
    }
}
