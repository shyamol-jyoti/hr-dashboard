import RegularWhisky from './components/RegularWhisky';
import PremiumWhisky from './components/PremiumWhisky';
import Rum from './components/Rum';
import Vodka from './components/Vodka';
import Beer from './components/Beer';
import Wine from './components/Wine';
import Irish from './components/Irish';
import Shooters from './components/Shooters';
import House from './components/House';
import Local from './components/Local';
import Chicken from './components/Chicken';
import Pork from './components/Pork';
import Veg from './components/Veg';
import Complementary from './components/Complementary';
import NotFound from './components/NotFound';
import Home from './components/Home';




export default{
	mode: 'history',

	linkActiveClass: 'font-bold text-orange-400',

	routes:[
		{
			path: '/',
			component: Home
		},
		{
			path: '/regular-whiskey',
			component: RegularWhisky
		},
		{
			path: '/premium-whiskey',
			component: PremiumWhisky
		},
		{
			path: '/rum',
			component: Rum
		},
		{
			path: '/vodka',
			component: Vodka
		},
		{
			path: '/beer',
			component: Beer
		},
		{
			path: '/wine',
			component: Wine
		},
		{
			path: '/irish-cocktails',
			component: Irish
		},
		{
			path: '/shooters',
			component: Shooters
		},
		{
			path: '/chicken',
			component: Chicken
		},
		{
			path: '/pork',
			component: Pork
		},
		{
			path: '/local',
			component: Local
		},
		{
			path: '/house',
			component: House
		},
		{
			path: '/veg',
			component: Veg
		},
		{
			path: '/complementary',
			component: Complementary
		},
		{
			path: '*',
			component: NotFound
		}
	]
};