# gear4music
 
Batch Processing System

Assumptions

- Each consignment is one parcel only.
- Each consignment data passed into the batch process function has been validated and correct.
- Each consignment is added as a line in the batch file. One line represents one consignment.
- This batch file only has 1 consignment to send to the courier specified in the consignment.


Implementation

- MVC structure partially implemented
- OO PHP


Execution

Please run the index.php file in the public folder.
A batch file will be created during execution and placed in the data folder. 
The batch file will contain consignment data from the test data created in the index.php file.  


Improvements

-Consignment data would come from a flat file or would be generated from a database.
- No security has been added to the scripts.
- More validation should be added to the consignment data.
- Checks to see if filehandles are actually available or have failed. Failure will cause script to crash.
- Possibly have the batchprocessing class extend the File class.
- An mvc setup to handle the opening, writing and closing of the batch file.

