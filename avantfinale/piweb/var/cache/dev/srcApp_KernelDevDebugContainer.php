<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJuOREQ2\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJuOREQ2/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJuOREQ2.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJuOREQ2\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJuOREQ2\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'JuOREQ2',
    'container.build_id' => '93669a36',
    'container.build_time' => 1652227971,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJuOREQ2');
