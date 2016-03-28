<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Category
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $parent_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $slug
 * @property-read \App\Category $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Category[] $children
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category roots()
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Order
 *
 * @property integer $id
 * @property integer $user_id
 * @property boolean $is_payment_complete
 * @property float $discount
 * @property float $price
 * @property integer $shipping_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereIsPaymentComplete($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereDiscount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereShippingId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereDeletedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property boolean $is_in_stock
 * @property string $description_short
 * @property string $description_long
 * @property integer $category_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $slug
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @property-read mixed $tag_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Specification[] $specifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ProductImage[] $images
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereIsInStock($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDescriptionShort($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDescriptionLong($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereSlug($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\ProductImage
 *
 * @property integer $id
 * @property string $image_uri
 * @property string $annotation
 * @property integer $product_id
 * @property string $image_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \App\Product $product
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereImageUri($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereAnnotation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereImageType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ProductImage whereDeletedAt($value)
 */
	class ProductImage extends \Eloquent {}
}

namespace App{
/**
 * App\ShippingListing
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $city
 * @property string $country
 * @property string $postal_code
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ShippingListing wherePostalCode($value)
 */
	class ShippingListing extends \Eloquent {}
}

namespace App{
/**
 * App\Specification
 *
 * @property integer $id
 * @property integer $product_id
 * @property string $name
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Specification whereUpdatedAt($value)
 */
	class Specification extends \Eloquent {}
}

namespace App{
/**
 * App\Tag
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tag whereSlug($value)
 */
	class Tag extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone_number
 * @property string $date_of_birth
 * @property string $role
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDeletedAt($value)
 */
	class User extends \Eloquent {}
}

