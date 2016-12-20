<?php
/* @var $ssr BEAR\ReactJsModule\Ssr */
list($markup, $script) = $ssr->render(['hello']);

return <<<"EOT"
<!doctype>
<html>
<head>
  <title>{$ssr->escape('title')}</title>
</head>
<body>
  <div id="root">{$markup}</div>
  <script src="build/react.bundle.js"></script>
  <script src="build/hello.bundle.js"></script>
  <script>{$script}</script>
</body>
</html>
EOT;
