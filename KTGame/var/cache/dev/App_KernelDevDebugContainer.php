<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZe2FHFx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZe2FHFx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZe2FHFx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZe2FHFx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZe2FHFx\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ze2FHFx',
    'container.build_id' => '1c39f2d7',
    'container.build_time' => 1641882506,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZe2FHFx');
