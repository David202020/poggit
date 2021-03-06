/*
 * Copyright 2016-2017 Poggit
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

$(function() {
    $(".settings-cb").click(function() {
        var cb = this;
        this.disabled = true;
        ajax("opt.toggle", {
            data: {
                name: this.getAttribute("data-name"),
                value: this.checked ? "true" : "false"
            },
            success: function() {
                cb.disabled = false;
            }
        });
    });
});
