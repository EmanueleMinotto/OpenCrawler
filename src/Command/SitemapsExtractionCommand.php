<?php

/*
 * Copyright (C) 2016 Emanuele Minotto
 *
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public
 * License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Bisarca\Command;

class SitemapsExtractionCommand
{
    use ContentAwareTrait;
    use UrlAwareTrait;

    /**
     * @param mixed $content
     * @param mixed $url
     *
     * @return SitemapsExtractionCommand
     */
    public static function fromContentAndUrl($content, $url)
    {
        $instance = new self();
        $instance->setContent($content);
        $instance->setUrl($url);

        return $instance;
    }
}