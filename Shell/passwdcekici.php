<?php
for($uid=0;$uid<2000;$uid++){ 
$nothing = posix_getpwuid($uid);
if (!empty($nothing)) {
while (list ($key, $val) = each($nothing)){
print "$val:";
}
print "<br />";
}
}
?>