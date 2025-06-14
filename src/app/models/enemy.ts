export interface Enemy {
  id: string;
  userId: string;
  charId: string;
  fight: number;
  enemy: string;
  enemyName: string;
  enemyLevel: number;
  enemyLife: number;
  enemyMaxLife: number;
  enemyMana: number;
  enemyMaxMana: number;
  enemyCondition: string;
  enemyAttack1: string;
  enemyAttack1Damage: number;
  enemyAttack2: string;
  enemyAttack2Damage: number;
  enemyPower: string;
  event: string;
  enemySpeed: number;
  enemyAgility: number;
  enemyStrength: number;
  enemyBlock: number;
  enemyArmor: number;
  enemyAccuracy: number;
  enemyWisdom: number;
  enemyLuck: number;
  enemyFireResist: number;
  enemyIceResist: number;
  enemyEarthResist: number;
  enemyAirResist: number;
  enemyDarkResist: number;
  enemyLightResist: number;
  enemyCriticalResist: number;
  enemyMindResist: number;
  enemyBleedResist: number;
  enemyHoldResist: number;
  enemyImmobilizeResist: number;
  enemyPoisonResist: number;
  enemyInfernoResist: number;
  enemyFrozenResist: number;
  enemyStunnedResist: number;
  enemyPoisonedResist: number;
  enemyBleedingResist: number;
}
