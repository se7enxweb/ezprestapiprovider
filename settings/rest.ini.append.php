<?php /* #?ini charset="utf-8"?

[ApiProvider]
# Deprecated extension: REST API v1 and v2 are served by the ezprestapi extension. These are the same values
# ezprestapi sets, so the order in which the two extensions are activated no longer matters, and an
# installation that activates only this extension still gets v1 and v2. Activate ezprestapi instead.
ProviderClass[ezp]=ezp7xRestApiProvider
ProviderClass[ezpl]=ezp7xRestApiProvider

# The template of the XHTML output of a node read, for the controller of ezprestapi.
[ezp7xRestContentController_viewContent_OutputSettings]
Template=rest_pagelayout.tpl

*/ ?>
