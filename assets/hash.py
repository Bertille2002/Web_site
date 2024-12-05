import hashlib as hash 

# hashing script 
password = '$_POST['password']'

hashed_password = hashlib.sha256(password.encode()).hexdigest()