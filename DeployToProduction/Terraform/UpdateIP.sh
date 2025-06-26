#!/bin/bash
#

CURRENTIP=`awk '/\[servers\]/ {flag=1; next} /^\[/ {flag=0} flag && /^[0-9]/' /etc/ansible/hosts | cut -d" " -f1`
NEWIP=`grep 'instance_public_ip' /DevOps/PerlBlog/terraform/tfout | cut -d'"' -f2`
perl -pi -e "s/${CURRENTIP}/${NEWIP}/g;" /etc/ansible/hosts
perl -pi -e "s/${CURRENTIP}/${NEWIP}/g;" /var/lib/jenkins/.ssh/config
echo "$CURRENTIP $NEWIP"
