<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJMCFNnB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJMCFNnB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJMCFNnB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJMCFNnB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJMCFNnB\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'JMCFNnB',
    'container.build_id' => '21ace1ce',
    'container.build_time' => 1548403162,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerJMCFNnB');
