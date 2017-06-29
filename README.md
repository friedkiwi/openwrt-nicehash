# openwrt-nicehash

This is an openwrt distribution optimised for nicehash mining on CUDA-based platforms. It features a web interface (unfinished) 
and is distributed as a kernel/initramfs combination which can easily be booted over PXE without any disks.

_ Warning: this code is pre-alpha and might not even be working _

## Build instructions

The `/files` directory contains a filesystem overlay with the kernel modules and mining software. You might have
to rebuild the nvidia modules if your GCC version doesn't match.

## Testing

`qemu-system-x86_64 -m 1024  -kernel release/openwrt-cuda-0.1-x86-64-ramfs.bzImage  -redir tcp:2222::22 -redir tcp:8080::80 -append 'BTCADDR=18YBTqPvetdQrAn66x512Zqfd6qRFArcKF'`
