/* ---------------------------------
 * Core Stylesheet
 * Created by Easy! Designs, LLC
 * http://easy-designs.net
 * --------------------------------- */

{embed="styles/reset"}

{embed="styles/typography"}

@media screen { 
  {embed="styles/layout-screen"}
}

@media screen and (max-width:860px),
(max-device-width:480px) and (orientation:portrait) { 
  {embed="styles/layout-mobile"}
}

@media print { 
  {embed="styles/layout-print"}
}

{embed="styles/color"}

{embed="styles/effects"}