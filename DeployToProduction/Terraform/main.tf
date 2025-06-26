#----------------------------------------------------------
#  Terraform 
#
# Launch an EC2 instance
#
# Peter Lorimer
#----------------------------------------------------------

provider "aws" {
  region = "us-east-1"

}


resource "aws_instance" "Blog" {
  ami           = "ami-0779caf41f9ba54f0" 
  instance_type = "t3.micro"             
  key_name = "default"
  associate_public_ip_address = true
 

  tags = {
    Name    = "Perl-Blog-Server"
    Owner   = "Peter Lorimer"
    project = "Jenkins"
  }
}
