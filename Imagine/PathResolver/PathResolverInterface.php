<?php

/*
 * This file is part of the Sil Project.
 *
 * Copyright (C) 2015-2017 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Sil\Bundle\MediaBundle\Imagine\PathResolver;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

interface PathResolverInterface
{
    /**
     * @param string $path
     *
     * @return string
     *
     * @throws NotFoundHttpException
     */
    public function resolvePath($path);

    /**
     * @param string $path
     *
     * @return string
     *
     * @throws NotFoundHttpException
     */
    public function resolveMime($path);
}