<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBBxmSzK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBBxmSzK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBBxmSzK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBBxmSzK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBBxmSzK\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'BBxmSzK',
    'container.build_id' => '32e1898f',
    'container.build_time' => 1548678382,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerBBxmSzK');
