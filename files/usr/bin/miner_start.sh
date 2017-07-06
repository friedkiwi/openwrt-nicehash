#!/bin/bash


rmmod r8169
modprobe r8168

lsmod | grep nvidia > /dev/null

if [ "$?" -eq "0" ]
then
	echo "Nvidia kernel module already loaded - skipping module load."
else
	echo "Loading nvidia kernel module..."
	/usr/sbin/modprobe nvidia
	if [ "$?" -eq "0" ]
	then
		echo "Module load success!"
	else
		echo "Failed to load module. Please log into this machine and inspect manually."
		sleep 5
		exit 1
	fi
fi


num_gpus=`lspci | grep VGA | wc -l`

echo "$num_gpus GPUs detected!"

num_gpus=`expr $num_gpus - 1`


gpus=""

for i in $(seq 0 $num_gpus)
do
	gpus="$gpus $i"
done


/usr/bin/nheqminer  -a 8888 -u `/usr/bin/get_btc_address` -cd $gpus

echo "Mining mining mining!"
