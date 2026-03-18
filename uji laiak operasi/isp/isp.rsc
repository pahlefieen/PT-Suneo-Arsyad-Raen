/system clock
set time-zone-autodetect=no time-zone-name=Asia/Jakarta
/interface bridge
add name=bridge1-lan disabled=no
/ip address
add address=192.168.100.1/24 interface=bridge1-lan
/ip pool
add name=dhcp_pool0 ranges=192.168.100.2-192.168.100.254
/ip dhcp-server
add address-pool=dhcp_pool0 interface=bridge1-lan name=dhcp1
/ip dhcp-server network
add address=192.168.100.0/24 dns-server=192.168.100.10 gateway=192.168.100.1
/ip dns
set allow-remote-requests=yes servers=8.8.8.8,1.1.1.1
/ip route
add disabled=no dst-address=0.0.0.0/0 gateway=144.79.240.41
/system/identity
set name=Router-Distribusi
/ip firewall nat
add action=masquerade chain=srcnat out-interface=ether1




