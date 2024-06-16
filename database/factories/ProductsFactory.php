<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productNames = [
            'Laptop', 'Smartphone', 'Tablet', 'Headphones', 'Smartwatch', 'Camera', 'Printer', 'Monitor', 'Keyboard', 'Mouse',
            'Gaming Console', 'Smart Speaker', 'Router', 'External Hard Drive', 'USB Flash Drive', 'Webcam', 'Microphone',
            'Bluetooth Speaker', 'Fitness Tracker', 'Drone', '3D Printer', 'VR Headset', 'E-Reader', 'Smart Thermostat',
            'Smart Light Bulb', 'Electric Scooter', 'Portable Charger', 'Wireless Charger', 'Action Camera', 'Digital Frame',
            'Smart Doorbell', 'Security Camera', 'Electric Toothbrush', 'Air Purifier', 'Robot Vacuum', 'Coffee Maker',
            'Blender', 'Slow Cooker', 'Microwave Oven', 'Toaster Oven', 'Food Processor', 'Air Fryer', 'Juicer', 'Ice Cream Maker',
            'Stand Mixer', 'Pressure Cooker', 'Electric Kettle', 'Water Filter', 'Hair Dryer', 'Curling Iron', 'Electric Shaver',
            'Epilator', 'Hair Straightener', 'Facial Steamer', 'Massage Gun', 'Electric Blanket', 'Space Heater', 'Fan',
            'Dehumidifier', 'Humidifier', 'Electric Grill', 'Induction Cooktop', 'Rice Cooker', 'Sous Vide', 'Dishwasher',
            'Refrigerator', 'Freezer', 'Washer', 'Dryer', 'Vacuum Cleaner', 'Steam Mop', 'Iron', 'Sewing Machine', 'Smartwatch Band',
            'Phone Case', 'Screen Protector', 'Laptop Bag', 'Camera Bag', 'Tripod', 'Lens', 'Memory Card', 'Smartphone Gimbal',
            'Photo Printer', 'Gaming Mouse', 'Gaming Keyboard', 'Gaming Headset', 'Gaming Chair', 'Game Controller', 'VR Gloves',
            'Portable Projector', 'TV', 'Soundbar', 'Streaming Device', 'Smart Plug', 'Smart Lock', 'Baby Monitor', 'Pet Camera',
            'Pet Feeder', 'Electric Bike', 'Treadmill', 'Exercise Bike', 'Elliptical Trainer', 'Rowing Machine', 'Dumbbells',
            'Yoga Mat', 'Resistance Bands', 'Jump Rope', 'Foam Roller', 'Gym Bag', 'Fitness Watch', 'Smart Scale', 'Blood Pressure Monitor',
            'Thermometer', 'Pulse Oximeter', 'Glucose Meter', 'Nebulizer', 'Hearing Aid', 'Electric Wheelchair', 'Mobility Scooter',
            'CPAP Machine', 'Oxygen Concentrator', 'Adjustable Bed', 'Mattress', 'Pillow', 'Bedside Lamp', 'Desk Lamp', 'Floor Lamp',
            'Ceiling Fan', 'Pendant Light', 'Chandelier', 'Wall Sconce', 'Table', 'Chair', 'Sofa', 'Bed', 'Dresser', 'Wardrobe',
            'Bookshelf', 'TV Stand', 'Coffee Table', 'Side Table', 'Dining Table', 'Office Chair', 'Office Desk', 'File Cabinet',
            'Whiteboard', 'Desk Organizer', 'Paper Shredder', 'Laminator', 'Label Maker', 'Notebook', 'Pen', 'Pencil', 'Marker',
            'Highlighter', 'Stapler', 'Tape Dispenser', 'Glue Gun', 'Scissors', 'Ruler', 'Calculator', 'Printer Paper', 'Photo Paper',
            'Ink Cartridge', 'Toner Cartridge', 'Paper Clips', 'Binder', 'Folder', 'Envelope', 'Shipping Box', 'Packing Tape',
            'Bubble Wrap', 'Stretch Wrap', 'Packaging Peanuts', 'Storage Bin', 'Toolbox', 'Hammer', 'Screwdriver', 'Wrench',
            'Pliers', 'Drill', 'Saw', 'Tape Measure', 'Level', 'Utility Knife', 'Safety Glasses', 'Work Gloves', 'Tool Belt',
            'Ladder', 'Workbench', 'Garage Door Opener', 'Car Battery', 'Tire Inflator', 'Jumper Cables', 'Car Vacuum',
            'Car Wax', 'Car Polish', 'Car Shampoo', 'Windshield Wiper', 'Motor Oil', 'Brake Fluid', 'Antifreeze', 'Fuel Additive',
            'Car Cover', 'Roof Rack', 'Bike Rack', 'Child Car Seat', 'Pet Car Seat', 'Cargo Net', 'Trailer Hitch', 'Car GPS',
            'Dash Cam', 'Backup Camera', 'Car Alarm', 'Car Stereo', 'Car Speaker', 'Subwoofer', 'Amplifier', 'Equalizer',
            'Car Phone Mount', 'Bluetooth Car Kit', 'FM Transmitter', 'Car Charger', 'Cup Holder', 'Sun Shade', 'Steering Wheel Cover',
            'Seat Cover', 'Floor Mats', 'Trunk Organizer', 'Roof Box', 'Snow Chains', 'Mud Flaps', 'Car Decals', 'License Plate Frame',
            'Air Freshener', 'Pet Barrier', 'Emergency Kit', 'First Aid Kit', 'Fire Extinguisher', 'Tire Pressure Gauge',
            'Jack Stand', 'Hydraulic Jack', 'Wheel Chock', 'Creeper', 'Mechanic Gloves', 'Shop Vacuum', 'Air Compressor',
            'Paint Sprayer', 'Pressure Washer', 'Leaf Blower', 'Lawn Mower', 'Hedge Trimmer', 'Chainsaw', 'Weed Eater',
            'Garden Hose', 'Sprinkler', 'Garden Shears', 'Pruning Saw', 'Shovel', 'Rake', 'Hoe', 'Wheelbarrow', 'Compost Bin',
            'Garden Cart', 'Greenhouse', 'Plant Stand', 'Grow Light', 'Seed Starter Kit', 'Plant Marker', 'Watering Can',
            'Plant Fertilizer', 'Plant Soil', 'Pest Control', 'Garden Statue', 'Garden Light', 'Bird Feeder', 'Bird House',
            'Bird Bath', 'Butterfly House', 'Bat House', 'Fountain', 'Garden Bench', 'Patio Table', 'Patio Chair',
            'Patio Umbrella', 'Grill', 'Smoker', 'Outdoor Heater', 'Fire Pit', 'Outdoor Rug', 'Gazebo', 'Pergola', 'Outdoor String Lights',
            'Hammock', 'Swing Chair', 'Trampoline', 'Swing Set', 'Slide', 'Sandbox', 'Playhouse', 'Treehouse', 'Bounce House',
            'Water Slide', 'Kiddie Pool', 'Inflatable Pool', 'Above Ground Pool', 'Inground Pool', 'Hot Tub', 'Pool Heater',
            'Pool Pump', 'Pool Filter', 'Pool Cleaner', 'Pool Skimmer', 'Pool Cover', 'Pool Ladder', 'Pool Noodles',
            'Pool Floats', 'Swimming Goggles', 'Swim Cap', 'Swim Fins', 'Diving Board', 'Water Polo Goal', 'Water Volleyball Set',
            'Water Basketball Set', 'Water Aerobics Equipment', 'Pool Toys', 'Beach Ball', 'Frisbee', 'Kite', 'Bocce Ball',
            'Croquet Set', 'Badminton Set', 'Tennis Racket', 'Tennis Balls', 'Ping Pong Table', 'Ping Pong Paddle',
            'Ping Pong Balls', 'Golf Clubs', 'Golf Balls', 'Golf Bag', 'Golf Cart', 'Golf Trolley', 'Golf Tees', 'Golf Glove',
            'Golf Shoes', 'Golf Hat', 'Golf Umbrella', 'Golf Towel', 'Golf Rangefinder', 'Golf Training Aids', 'Soccer Ball',
            'Soccer Goal', 'Soccer Net', 'Soccer Shoes', 'Soccer Jersey', 'Soccer Shorts', 'Soccer Socks', 'Soccer Shin Guards',
            'Basketball', 'Basketball Hoop', 'Basketball Net', 'Basketball Shoes', 'Basketball Jersey', 'Basketball Shorts',
            'Basketball Socks', 'Basketball Arm Sleeve', 'Baseball', 'Baseball Bat', 'Baseball Glove', 'Baseball Cap',
            'Baseball Jersey', 'Baseball Pants', 'Baseball Socks', 'Baseball Cleats', 'Softball', 'Softball Bat', 'Softball Glove',
            'Softball Cap', 'Softball Jersey', 'Softball Pants', 'Softball Socks', 'Softball Cleats', 'Volleyball', 'Volleyball Net',
            'Volleyball Shoes', 'Volleyball Jersey', 'Volleyball Shorts', 'Volleyball Socks', 'Volleyball Knee Pads',
            'Volleyball Arm Sleeve', 'Football', 'Football Helmet', 'Football Shoulder Pads', 'Football Jersey', 'Football Pants',
            'Football Socks', 'Football Cleats', 'Football Gloves', 'Football Arm Sleeve', 'Hockey Puck', 'Hockey Stick',
            'Hockey Helmet', 'Hockey Jersey', 'Hockey Pants', 'Hockey Socks', 'Hockey Skates', 'Hockey Gloves', 'Hockey Pads',
            'Lacrosse Ball', 'Lacrosse Stick', 'Lacrosse Helmet', 'Lacrosse Jersey', 'Lacrosse Pants', 'Lacrosse Socks',
            'Lacrosse Cleats', 'Lacrosse Gloves', 'Lacrosse Pads', 'Cricket Ball', 'Cricket Bat', 'Cricket Helmet',
            'Cricket Jersey', 'Cricket Pants', 'Cricket Socks', 'Cricket Shoes', 'Cricket Gloves', 'Cricket Pads', 'Rugby Ball',
            'Rugby Jersey', 'Rugby Shorts', 'Rugby Socks', 'Rugby Cleats', 'Rugby Gloves', 'Rugby Pads', 'Rugby Helmet',
            'Rugby Mouthguard', 'Bowling Ball', 'Bowling Shoes', 'Bowling Bag', 'Bowling Glove', 'Bowling Towel', 'Bowling Ball Cleaner',
            'Bowling Tape', 'Bowling Wrist Support', 'Bowling Arm Sleeve', 'Darts', 'Dartboard', 'Dart Flights', 'Dart Shafts',
            'Dart Points', 'Dart Cases', 'Dart Mat', 'Dartboard Surround', 'Dartboard Cabinet', 'Fishing Rod', 'Fishing Reel',
            'Fishing Line', 'Fishing Hook', 'Fishing Bait', 'Fishing Lure', 'Fishing Net', 'Fishing Tackle Box', 'Fishing Waders',
            'Fishing Vest', 'Fishing Hat', 'Fishing Sunglasses', 'Fishing Gloves', 'Fishing Pliers', 'Fishing Knife', 'Fishing Scale',
            'Fishing Gaff', 'Fishing Rod Holder', 'Fishing Kayak', 'Fishing Boat', 'Boat Motor', 'Boat Trailer', 'Life Jacket',
            'Boat Cover', 'Anchor', 'Fish Finder', 'Marine Radio', 'Boat Cooler', 'Boat Grill', 'Boat Seat', 'Boat Steering Wheel',
            'Boat Ladder', 'Boat Dock', 'Boat Lift', 'Boat Bimini Top', 'Boat Fenders', 'Boat Bilge Pump', 'Boat Navigation Lights',
            'Boat Cleaning Supplies', 'Boat Repair Kit', 'Boat Safety Kit', 'Boat Fire Extinguisher', 'Boat First Aid Kit',
            'Boat Compass', 'Boat Horn', 'Boat Whistle', 'Boat Anchor Light', 'Boat Bow Light', 'Boat Stern Light', 'Boat Anchor Rope',
            'Boat Anchor Chain', 'Boat Anchor Swivel', 'Boat Dock Line', 'Boat Dock Cleat', 'Boat Dock Bumper', 'Boat Dock Wheel',
            'Boat Dock Ladder', 'Boat Dock Step', 'Boat Dock Bench', 'Boat Dock Table', 'Boat Dock Umbrella', 'Boat Dock Storage',
            'Boat Dock Light', 'Boat Dock Power Pedestal', 'Boat Dock Water Pedestal', 'Boat Dock Fuel Pedestal', 'Boat Dock Ice Machine',
            'Boat Dock Fish Cleaning Station', 'Boat Dock Hand Truck', 'Boat Dock Cart', 'Boat Dock Dolly', 'Boat Dock Hoist',
            'Boat Dock Winch', 'Boat Dock Cradle', 'Boat Dock Lift Motor', 'Boat Dock Lift Control', 'Boat Dock Lift Canopy',
            'Boat Dock Lift Guide', 'Boat Dock Lift Bunk', 'Boat Dock Lift Roller', 'Boat Dock Lift Wheel', 'Boat Dock Lift Jack',
            'Boat Dock Lift Frame', 'Boat Dock Lift Bracket', 'Boat Dock Lift Beam', 'Boat Dock Lift Column', 'Boat Dock Lift Leg',
            'Boat Dock Lift Arm', 'Boat Dock Lift Pad', 'Boat Dock Lift Strap', 'Boat Dock Lift Cable', 'Boat Dock Lift Pulley',
            'Boat Dock Lift Gear', 'Boat Dock Lift Chain', 'Boat Dock Lift Motor Mount', 'Boat Dock Lift Motor Cover', 'Boat Dock Lift Motor Bracket',
            'Boat Dock Lift Motor Base', 'Boat Dock Lift Motor Shaft', 'Boat Dock Lift Motor Arm', 'Boat Dock Lift Motor Guide',
            'Boat Dock Lift Motor Roller', 'Boat Dock Lift Motor Wheel', 'Boat Dock Lift Motor Jack', 'Boat Dock Lift Motor Frame',
            'Boat Dock Lift Motor Beam', 'Boat Dock Lift Motor Column', 'Boat Dock Lift Motor Leg', 'Boat Dock Lift Motor Pad',
            'Boat Dock Lift Motor Strap', 'Boat Dock Lift Motor Cable', 'Boat Dock Lift Motor Pulley', 'Boat Dock Lift Motor Gear',
            'Boat Dock Lift Motor Chain', 'Boat Dock Lift Motor Cover', 'Boat Dock Lift Motor Bracket', 'Boat Dock Lift Motor Base',
            'Boat Dock Lift Motor Shaft', 'Boat Dock Lift Motor Arm', 'Boat Dock Lift Motor Guide', 'Boat Dock Lift Motor Roller',
            'Boat Dock Lift Motor Wheel', 'Boat Dock Lift Motor Jack', 'Boat Dock Lift Motor Frame', 'Boat Dock Lift Motor Beam',
            'Boat Dock Lift Motor Column', 'Boat Dock Lift Motor Leg', 'Boat Dock Lift Motor Pad', 'Boat Dock Lift Motor Strap',
            'Boat Dock Lift Motor Cable', 'Boat Dock Lift Motor Pulley', 'Boat Dock Lift Motor Gear', 'Boat Dock Lift Motor Chain'
        ];

        return [
            'name' => fake()->unique()->randomElement($productNames),
            'image' => 'productsImages/' . fake()->numberBetween(1, 200) . '.jpg',
            'buyingPrice' => fake()->numberBetween(300, 500),
            'sellingPrice' => fake()->numberBetween(500, 800),
        ];
    }
}
