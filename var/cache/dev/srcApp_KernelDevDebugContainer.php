<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Sh50qx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Sh50qx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6Sh50qx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6Sh50qx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6Sh50qx\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '6Sh50qx',
    'container.build_id' => '7ba8ea35',
    'container.build_time' => 1555864286,
), __DIR__.\DIRECTORY_SEPARATOR.'Container6Sh50qx');
