<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEwrmvU6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEwrmvU6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEwrmvU6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEwrmvU6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEwrmvU6\App_KernelDevDebugContainer([
    'container.build_hash' => 'EwrmvU6',
    'container.build_id' => '28b18122',
    'container.build_time' => 1641844376,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEwrmvU6');
