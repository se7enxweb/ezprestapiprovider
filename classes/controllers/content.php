<?php
/**
 * File containing the ezpRestContentController class.
 *
 * @copyright Copyright (C) 1998 - 2026 7x & Exponential Foundation. All rights reserved.
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

/**
 * Deprecated: the content controller of REST API v1 now lives in the ezprestapi extension
 * (ezp7xRestContentController), which answers the same v1 reads with the same bodies and checks the user's
 * rights before every read and write.
 *
 * This name is kept for code that extends it or routes to it.
 *
 * @deprecated since 6.0.4, use ezp7xRestContentController of the ezprestapi extension
 */
class ezpRestContentController extends ezp7xRestContentController
{
}
