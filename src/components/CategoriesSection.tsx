import { Button } from "@/components/ui/button";
import { ArrowRight } from "lucide-react";
import Link from "next/link";

const categories = [
  {
    id: "residential-homes",
    title: "Residential Homes",
    description: "Experience elegance and comfort with our exclusive residential homes, designed for sophisticated living.",
    image: "https://ext.same-assets.com/2009473017/4285005643.jpeg",
    link: "/categories/residential-homes"
  },
  {
    id: "luxury-villas",
    title: "Luxury Villas",
    description: "Experience elegance and comfort with our exclusive luxury villas, designed for sophisticated living.",
    image: "https://ext.same-assets.com/2009473017/207102694.jpeg",
    link: "/categories/luxury-villas"
  },
  {
    id: "apartments",
    title: "Apartments",
    description: "Modern apartment living with premium amenities and stunning city views in prime locations.",
    image: "https://ext.same-assets.com/2009473017/556957017.jpeg",
    link: "/categories/apartments"
  },
  {
    id: "office-spaces",
    title: "Office Spaces",
    description: "Professional office spaces designed for productivity and success in prestigious business districts.",
    image: "https://ext.same-assets.com/2009473017/2851592780.jpeg",
    link: "/categories/office-spaces"
  }
];

export default function CategoriesSection() {
  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Section Header */}
        <div className="text-center mb-16">
          <p className="text-red-600 font-medium mb-4 uppercase tracking-wide">Categories</p>
          <h2 className="text-4xl md:text-5xl font-radio-canada font-bold text-gray-900 mb-6">
            Explore best properties with expert services.
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Discover a diverse range of premium properties, from luxurious apartments to spacious villas,
            tailored to your needs.
          </p>
          <div className="mt-8">
            <Button asChild className="bg-red-600 hover:bg-red-700 text-white px-8 py-3 shadow-lg">
              <Link href="/properties">
                View Properties
                <ArrowRight className="w-4 h-4 ml-2" />
              </Link>
            </Button>
          </div>
        </div>

        {/* Categories Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {categories.map((category, index) => (
            <Link
              key={category.id}
              href={category.link}
              className="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              {/* Image */}
              <div className="relative h-64 overflow-hidden">
                <img
                  src={category.image}
                  alt={category.title}
                  className="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent" />
              </div>

              {/* Content */}
              <div className="absolute bottom-0 left-0 right-0 p-6 text-white">
                <h3 className="text-xl font-radio-canada font-bold mb-2 group-hover:text-red-400 transition-colors">
                  {category.title}
                </h3>
                <p className="text-sm text-gray-200 leading-relaxed opacity-90 group-hover:opacity-100 transition-opacity">
                  {category.description}
                </p>

                {/* Hover Arrow */}
                <div className="flex items-center mt-3 opacity-0 group-hover:opacity-100 transition-opacity">
                  <span className="text-sm font-medium">Explore</span>
                  <ArrowRight className="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" />
                </div>
              </div>

              {/* Hover Overlay */}
              <div className="absolute inset-0 bg-red-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300" />
            </Link>
          ))}
        </div>

        {/* Stats Section */}
        <div className="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
          <div className="p-6">
            <div className="text-4xl font-radio-canada font-bold text-gray-900 mb-2">500+</div>
            <p className="text-gray-600">Premium Properties</p>
          </div>
          <div className="p-6">
            <div className="text-4xl font-radio-canada font-bold text-gray-900 mb-2">1000+</div>
            <p className="text-gray-600">Happy Clients</p>
          </div>
          <div className="p-6">
            <div className="text-4xl font-radio-canada font-bold text-gray-900 mb-2">15+</div>
            <p className="text-gray-600">Years Experience</p>
          </div>
        </div>
      </div>
    </section>
  );
}
