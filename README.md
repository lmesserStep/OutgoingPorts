# OutgoingPorts
This is an outgoing port tester that allows you to test if you're able to reach the web server from your network. It helps determine if the outgoing port is able to facilitate a TCP three-way handshake. The small page of php will return an output of the port that the server was requested from and the port you used to initiate the connection. 

The magic here is the IPTable rule list and your choice of webserver. It is critical to make sure you have the proper rules in place to prevent unwanted attention. 


# IPTable rules
An example IPTable output is provided and can be modified to fit your needs.
