<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVBytGw2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVBytGw2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVBytGw2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVBytGw2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVBytGw2\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'VBytGw2',
    'container.build_id' => 'f4c2b551',
    'container.build_time' => 1548673792,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerVBytGw2');
