<?php

echo in_array("ArrayAccess", get_declared_interfaces()) + in_array("ArrayObject", get_declared_classes());