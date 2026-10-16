<?php
/**
 * File containing the ezpRestApiProvider class.
 *
 * @copyright Copyright (C) 1998 - 2026 7x & Exponential Foundation. All rights reserved.
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

/**
 * Deprecated: the content provider of REST API v1 now lives in the ezprestapi extension, which serves the
 * reads at v1 and v2 and the writes at v2 from one route table (ezp7xRestApiProvider).
 *
 * This name is kept so a rest.ini that still says ProviderClass[ezp]=ezpRestApiProvider, or code that extends
 * this class, gets the same routes as ezprestapi. Activate ezprestapi instead of this extension.
 *
 * @deprecated since 6.0.4, use ezp7xRestApiProvider of the ezprestapi extension
 */
class ezpRestApiProvider extends ezp7xRestApiProvider
{
}
