# About

This Laravel trait limits the columns an Eloquent model can return. As opposed to `$visible` and `$hidden` this trait will only select the specified columns.

# Installation

Use composer:
`composer require gmask/returnable`

# Usage

Add the trait to your model:

```
namespace App\Models;

use Gmask\Returnable\ReturnableTrait;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use ReturnableTrait;

    protected $returnable = ['Name', 'ConNum', 'Address', 'City', 'State', 'Zip', 'PhoneNum', 'EMailAddress', 'Country', 'Url'];
```

Only the specified columns will be returned when the Model is loaded.
